# BS-Modal-Laravel

Laravel components for Bootstrap modals

[![Name](https://badgen.net/packagist/name/regnilk/bs-modal-laravel?color=blue)](https://packagist.org/packages/regnilk/bs-modal-laravel)
[![Latest stable release](https://badgen.net/packagist/v/regnilk/bs-modal-laravel?color=cyan)](https://packagist.org/packages/regnilk/bs-modal-modal-laravel)
[![Name](https://badgen.net/github/last-commit/regnilk/bs-modal-laravel?color=green)](https://github.com/regnilk/bs-modal-laravel)

[![Total Download](https://badgen.net/packagist/dt/regnilk/bs-modal-laravel?color=green)](https://github.com/regnilk/bs-modal-laravel)
[![GitHub Watchers](https://badgen.net/packagist/ghw/regnilk/bs-modal-laravel?color=blue)](https://github.com/regnilk/bs-modal-laravel)
[![GitHub Stars](https://badgen.net/packagist/ghs/regnilk/bs-modal-laravel?color=yellow)](https://github.com/regnilk/bs-modal-laravel)
[![GitHub Followers](https://badgen.net/packagist/ghf/regnilk/bs-modal-laravel?color=cyan)](https://github.com/regnilk/bs-modal-laravel)

[![php](https://badgen.net/packagist/php/regnilk/bs-modal-laravel?color=orange)]()
[![laravel](https://badgen.net/badge/Laravel/&gt;&equals;8.0?color=orange)]()
[![bootstrap](https://badgen.net/badge/Bootstrap/&gt;&equals;4.0?color=orange)]()
[![fa-laravel](https://badgen.net/badge/regnilk-fa-laravel/&gt;&equals;1.1?color=orange)]()

[![License](https://badgen.net/packagist/license/regnilk/bs-modal-laravel)]()

> **Note** : This package is to be used with Laravel v8 and Bootstrap v4.
>
> It also requires [LaravelCollective/HTML](https://laravelcollective.com/docs/6.x/html) v6

* [Installation](#installation)
* [Configuration](#configuration)
* [Usage](#usage)
* [Theming](#theming)
* [Parameters](#parameters)
* [Contact](#contact)
* [License](#license)
* [Copyright](#copyright)

## Installation

Install the package via Composer:

```sh
    $ composer require regnilk/bs-modal-laravel
```

The package service provider will be registered automatically.

## Configuration

There is no need for configuration

## Usage

To display a modal, just call it this way :

```html

<x-modal-success title="Confirm this ?" url="{{url('/confirm-this')}}" message="Do you confirm this ?"/>
```

You can customize this component like any other :

```html

<x-modal-danger title="myTitle" url="{{url('/'}}" message="myMessage" class="my-2" style="font-weight: bold;"/>
```

## Theming

You can use different bootstrap themes for your modals and modals trigger buttons : Danger, Dark, Info, Light, Primary, Secondary, Success and Warning

```html

<x-modal-danger/>
<x-modal-dark/>
<x-modal-info/>
<x-modal-light/>
<x-modal-primary/>
<x-modal-secondary/>
<x-modal-success/>
<x-modal-warning/>
```

## Parameters

For each of these modules, you can use different parameters. Only three of them are mandatory : title, url and message.

- **title** : the title of the modal and the text that will be displayed when hovering the button.

- **url** : the url used by the form in the modal

- **message** : the text of the modal's body.

- **icon** : the icon displayed in the trigger button, in the modal header and in the form submit button (uses [fa-laravel](https://github.com/regnilk/fa-laravel))

  If no icon parameter is set, a default icon will be displayed.

  If you don't want to display any icon, pass an empty icon parameter.

  ```html
    <x-modal-info title="title" url="{{url('/'}}" message="myMessage" icon="" /> 
  ```

- **btnText** : the text in the trigger.

  If no parameter is set, 'OK' will be shown by default.

  If you want no btnText, you have to pass the parameter with an empty value.

  ```html
      <x-modal-info title="title" url="{{url('/'}}" message="myMessage" btnText="ok" /> 
    ```
- **modalBtnText** : the text in the submit button.

  If no parameter is set, the btnText value will be used. If the btnText is not set 'OK' will be shown by default.

  ```html
      <x-modal-info title="title" url="{{url('/'}}" message="myMessage" modalBtnText="ok" /> 
    ```

- **comment** : If set to true, you will have à textarea in the modal to leave a comment.

The dafault value is set to false.

- **outline** : If set to true, all the buttons will be displayed in outline mode. The header colors will also be inverted.

- **method** : You can indicate the method used in the modal's form.

  Possible values are : GET, POST, DELETE, PUT and PATCH (default)

- **mode** : You can choose the display mode of the trigger.

  - button : the trigger will be a button (default value)
  - link : the trigger will be a link

Here is a full example for a button trigger :

```html
<x-modal-warning title="Delete" url="{{url('/delete'}}" message="Do you want to delete ?" icon="delete" btnText="Delete" modalBtnText="Remove" comment="true" outline="true" method="delete" mode="button" />
```

And a full example for a link trigger :

```html
<x-modal-warning title="Delete" url="{{url('/delete'}}" message="Do you want to delete ?" icon="delete" btnText="Delete" modalBtnText="Remove" comment="true" outline="true" method="delete" mode="link" />
```

## Contact

Please use [GitHub](https://github.com/regnilk/bs-modal-laravel) for making comments or suggestions or to report bugs.

## License

[Bs-Modal-Laravel](https://github.com/regnilk/bs-modal-laravel) written by Regnilk and released under the [MIT License](LICENSE).

## Copyright

Copyright &copy; 2020 Regnilk