<?php
require_once 'classes/Seller.php';
require_once 'classes/User.php';
require_once 'classes/Company.php';
require_once 'classes/Tooltipable.php';

function displayTooltip(Tooltipable $tooltipable): void
{
  echo '<div>
    <h3>' . $tooltipable->getTitle() . '</h3>
    <p>' . $tooltipable->getDescription() . '</p>
    </div>';
}

$seller = new Seller('John', 'Wayne', 'Faurecia');

$user = new User('Jerome', 'parmentier');
$company = new Company('Loreal', 'route pierre dupond');

displayTooltip($company);
displayTooltip($user);
displayTooltip($seller);
