<?php

function isUploadSuccessful(array $uploadedFile): bool {
    return isset($uploadedFile['error']) && $uploadedFile['error'] === UPLOAD_ERR_OK;
};

if (!isUploadSuccessful($_FILES['uploaded_file'])) {
    throw new RuntimeException('Error while uploading file.');
};

function isUploadSmallerThan2M(array $uploadedFile): bool {
  return $uploadedFile['size'] < 2000000;
}

if (!isUploadSmallerThan2M($_FILES['uploaded_file'])) {
  throw new RuntimeException('File is too big.');
}

function isMimeTypeAuthorized(array $uploadedFile): bool {
  $finfo = new finfo(FILEINFO_MIME_TYPE);
  $mimeType = $finfo->file($uploadedFile['tmp_name']);

  return in_array($mimeType, ['image/jpeg', 'image/png', 'image/gif'], true);
}


if (!isMimeTypeAuthorized($_FILES['uploaded_file'])) {
  throw new RuntimeException('Invalid file mime type.');
}

function getExtensionFromMimeType(string $mimeType): ?string {
  switch ($mimeType) {
      case 'image/jpeg':
          return 'jpg';
      case 'image/png':
          return 'png';
      case 'image/gif':
          return 'gif';
      default:
          return null;
  }
}

function moveUploadedFile(array $uploadedFile): bool {
  $finfo = new finfo(FILEINFO_MIME_TYPE);
  $mimeType = $finfo->file($uploadedFile['tmp_name']);

  return move_uploaded_file(
      $uploadedFile['tmp_name'],
      sprintf('./uploads/%s.%s',
          sha1_file($uploadedFile['tmp_name']),
          getExtensionFromMimeType($mimeType)
      )
  );
}

if (!moveUploadedFile($_FILES['uploaded_file'])) {
  throw new RuntimeException('Impossible to upload file.');
}

