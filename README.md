<img src="fusion-core-ui-logo.png">

## About Fusion Core UI
Fusion Core UI is a Laravel Blade & Tailwind CSS component library. It draws inspiration from
futuristic styles, clean and sleek. The goal is to allow this library to give your next app or project
a clean and bright feel grabbed straight out of a distant future!

## Requirements
* Must be using at least **Laravel 9**
* Must be using at least **PHP 8.1**
* Must be using **Tailwind CSS V3.4**
  * You will need the Tailwind Form Plugin: https://github.com/tailwindlabs/tailwindcss-forms

## Installing and Setup

1. `composer require aalicki/fusion-core-ui`

## Current Release and Stability
`v0.0.1-alpha`

⚠️ Not Production or Development Ready Yet.

## Compatability
I want this library to be compatabile with other UI's you may rely on. Therefore, it comes with
an auto-prefix in order to display the components, `<x-fusion-core-ui-_____>`. This is explained in detail below (coming soon).

## Roadmap 2024

The below elements will be in the initial version of Fusion Core UI with at least 1 or 2 variants.
Once these features are complete, it will signify version *1.0* of Fusion Core UI and will be considered
ready for production-level projects.

### Components

- Alerts 
- Avatars
- Badge
- Breadcrumbs
- Button
- Button Group
- Card
- Dropdown
- Heading
- Input
- Input Group
- List Group
- Modal
- Navbar
- Pagination
- Pricing
- Progress Bar
- Stats
- Switch (Radio)
- Table
- Tabs
---

### Javascript
In order to use dismissible, modals, and . You will need to ensure the JS is being loaded into your
application

---

## Alerts

Full Example, includes an Icon, the Type, and a Dismissible button:

```php
<x-fusion-core-ui-alert dismissible icon='<i class="fa-solid fa-house"></i>' type="info">Fusion Core UI Default Alert.</x-fusion-core-ui-alert>
```

Basic Example (No, dismissible, icon, with default class):

```php
<x-fusion-core-ui-alert>Alert based alert.</x-fusion-core-ui-alert>
```

## Avatars

Avatar with a profile image passed in

```php
<x-fusion-core-ui-avatar img="https://i.pravatar.cc/60" />
```

Large Avatar without a label

```php
<x-fusion-core-ui-avatar size="lg" label="ZX" />
```

## Badges

Default badge

```php
<x-fusion-core-ui-badge>Default Badge</x-fusion-core-ui-badge>
```

Warning Badge

```php
<x-fusion-core-ui-badge type="warning">Warning Badge</x-fusion-core-ui-badge>
```

Info Badge with an Icon

```php
<x-fusion-core-ui-badge type="info" icon='<i class="fa-solid fa-house"></i>'>Warning Badge</x-fusion-core-ui-badge>
```

---

## FAQ

**Question:** Will there be a documentation and example site?
- Yes

**Question:** Will you accept Pull Requests? 
- Yes, if you're interested in this project I'll be happy to utilize your contributions if they fit the intended vision.

**Question:** How long will you maintain this for?
- Indefinitely, and if I no longer see myself able to contribute I will hand it off to someone more capable.

**Question:** Will there be a standalone Tailwind or Laravel option?
- Not anytime soon. I like this idea, but it likely won't happen until version 2 or 3.

**Question:** Will there be more than 1 theme?
- I like the idea of having at least something for Dark / Light Modes. But Currently the focus is on building components that look best on darker backgrounds.

**Question:** What's up with the name?
- My very first domain and project was an online game called Fusion-Effect which existed from 2006-2008. This is a throwback that that name and project.
---

## Maintainers
Adam Alicki - https://alicki.me

#### Why another UI Kit?
This is my first step into open-source, and it's somewhat of a personal challenge for myself,
in addition to a learning expirement. It's also my way of giving back to the Laravel and
Tailwind community, both have allowed me to pay my bills for many years.
