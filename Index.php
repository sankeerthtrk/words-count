<?php
require_once __DIR__ . '/vendor/autoload.php';

$instance = new alshaya\WordCount\GetCount();

$instance->setText("Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum
sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
pellentesque eu, pretiu@$&^m quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec,
vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis
pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean
leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel
augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum
rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus
pulvinar, hendrerit id, lorem. Maecenas nec odio et an%te tincidunt tempus. Donec vitae sapien ut libero venenatis
faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincid-unt. Duis leo. Sed fringilla mauris sit amet
nibh. Donec sodales sagittis magna. Sed consequat, leo eget bib</>endum sodales,<br> augue </b>velit cursus nunc");

$rest = $instance->getWordRanking("array"); // Param example(array/json)

print_r($rest);