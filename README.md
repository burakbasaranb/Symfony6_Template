<p align="center">
    <a href="https://symfony.com" target="_blank">
        <img src="https://symfony.com/logos/symfony_black_02.png" width="300" alt="Laravel Logo">
    </a>
</p>

# Symfony 6.4 Template Repository

Welcome to the Symfony 6.4 Template Repository! 🚀 This repository is designed to be a comprehensive starting point for your Symfony projects. Whether you are an experienced Symfony developer or just stepping into the world of PHP frameworks, this template offers a robust foundation.

## Getting Started

To begin your Symfony journey with this template, simply fork the repository and clone it to your local environment. Follow the step-by-step instructions in the documentation to set up your development environment, and soon you'll be crafting Symfony applications with ease.

### Step 1: Symfony Installation

To kickstart your project, use the following command to create a Symfony project:

```bash
composer create-project symfony/symfony-demo my_project
```
### Step 2: Apache Configuration

Symfony requires the intl extension to function properly. Ensure it is activated in your php.ini file. Open the file and uncomment or add the following line:

```ini
extension=intl
```
### Step 3: Run Symfony

```bash
php -S localhost:8000 -t public/
```

## Let's create a custom page such as `Lucky Number`

To add the "Lucky Number" page to your Symfony application, follow these detailed steps:

### Step 1: Create a Controller

- Step 1.1: Open `src/Controller` folder
- Step 1.2: Create new controller such as `LuckyController.php` 
- Step 1.3: Add the following code:

```php
<?php

// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;   

class LuckyController extends AbstractController
{
    #[Route('/lucky/number', name: 'lucky_number', methods: ['GET'])]
    public function number(): Response
    {
        $number = random_int(0, 100);
        
        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
}
```
### Step 2: Use route in main menu

Open a relevant file, such as `templates/base.html.twig`, and include a link with `href="{{ path('lucky_number') }}"`:

```twig
<li class="nav-item{{ _route == 'lucky_number' ? ' active' : '' }}">
    <a class="nav-link" href="{{ path('lucky_number') }}">
        <i class="fas fa-dice" aria-hidden="true"></i> {{ 'menu.lucky_number'|trans }}
    </a>
</li>
```

### Step 3: Publish into Twig Page 

Create the file `templates/lucky/number.html.twig` with the following content:

```twig
{% extends 'base.html.twig' %}

{% block main %}
   
<h1>{{ 'menu.lucky_number'|trans }}</h1>

    <div >
        <i class="fa fa-save" aria-hidden="true"></i> {{ number }}
    </div>
    
{% endblock %}
```

## How to Use Symfony Translation?

### Step 1: Add Language Text

Open the language file, such as `\translations\messages+intl-icu.en.xlf` or `\translations\validators+intl-icu.en.xlf`, and add the translation for `menu.lucky_number`:

```xlf
<trans-unit id="menu.lucky_number">
     <source>menu.lucky_number</source>
     <target>Lucky Number</target>
 </trans-unit>
```

### Step 2: Use Translated Text

In relevant files like `templates/base.html.twig` or `templates/lucky/number.html.twig`, use the translated text with `{{ 'menu.lucky_number'|trans }}`:

```twig
<li class="nav-item{{ _route == 'lucky_number' ? ' active' : '' }}">
    <a class="nav-link" href="{{ path('lucky_number') }}">
        <i class="fas fa-dice" aria-hidden="true"></i> {{ 'menu.lucky_number'|trans }}
    </a>
</li>
```

```twing
<h1>{{ 'menu.lucky_number'|trans }}</h1>
```

---

By following these detailed steps, you'll successfully integrate the "Lucky Number" page and Symfony translation features into your project. Feel free to adapt and extend these instructions based on your specific project requirements.

## How to Use

Once you have installed the Symfony project and configured your environment, explore the codebase, and take advantage of the built-in features. Customize the template according to your project requirements, leveraging the flexibility Symfony offers for web application development.

## Contributing

We welcome contributions to enhance and improve this template. If you have ideas, encounter issues, or want to suggest improvements, feel free to open an issue or submit a pull request. Your input is valuable, and together we can make this Symfony template even more powerful and user-friendly.

## License

This Symfony 6.4 Template Repository is open-source and available under the MIT License. Feel free to use, modify, and share it with others. Happy coding!

---

Feel free to adjust the details, add more sections, or include any specific instructions that would benefit users working with your Symfony template.
