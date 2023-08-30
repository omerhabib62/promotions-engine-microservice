# promotions-engine-microservice
This repository is for learning symfony by creating a promtions service and its based on microservice architecture. 


# Resources
For tutorial of this project - https://www.youtube.com/watch?v=pZv93AEJhS8&ab_channel=GaryClarke
For setting up vs code - https://www.youtube.com/watch?v=wSw-kDBW_Zw&ab_channel=CodeWithDary
For symfony setup - https://symfony.com/doc/current/setup.html

--- 
# Notes
---
## For running project 
symfony serve -v
<br/>

## Great DTO website

https://json2dto.atymic.dev/

<br/>

## For DTO use serializer (composer require serializer)

<br/>

## For schema(instead of models like in Laravel, we use entities), we use Doctrine (composer require doctrine)

<br/>

## for creating entities php bin/console make:entity EntityName
 
 <br/>

 -> The commands created: src/Entity/EntityName.php and  src/Repository/EntityNameRepository.php
 <br/>

 -> It asks for fields in this command!
 <br/>

 -> You can always add more fields later manually or by re-running this command.
 <br/>
 -> When you're done, create a migration with php bin/console make:migration
