<div>&nbsp;</div>

<div align="center">
<img src="fusion-core-ui-logo.png">
</div>

----

<div id="header" align="center">

[![image](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com/)
[![image](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)](https://tailwindcss.com)

[![GPLv3 License](https://img.shields.io/badge/License-GPL%20v3-yellow.svg)](https://opensource.org/licenses/)
[![Github All Releases](https://img.shields.io/github/downloads/aalicki/fusion-ui-kit/total.svg?style=flat)]()

</div>

---

## Contents

* [About Fusion Core UI](#about-fusion-core-ui)
* [Requirements](#requirements)
* [Installation & Setup](#installing-and-setup)
* [Current Stability](#current-release-and-stability)
* [Compatability](#compatability)
* [Roadmap](#roadmap-2024)
* [Components](#components)
  * [Alerts](#alerts)
  * [Avatars](#avatars)
  * [Badges](#badges)
  * [Breadcrumbs](#breadcrumbs)
  * [Buttons](#buttons)
  * [Button Groups](#button-group)
  * [Cards](#card)
  * [Checkboxes](#checkboxes)
  * [Dropdowns](#dropdown)
  * [Headings](#heading)
  * [Inputs](#input)
  * [Input Groups](#input-group)
  * [List Groups](#list-group)
  * [Modals](#modal)
  * [Nav Bars](#navbar)
  * [Nav Links](#navlinks)
  * [Pagination](#pagination) - Broken
  * [Pricing](#pricing)
  * [Progress Bars](#progress-bar)
  * [Stats](#stats)
  * [Switches (Radio)](#switch-radio)
  * [Tables](#table)
  * [Tabs](#tabs)
* [FAQ](#faq)
* [Maintainers](#maintainers)
---

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
`v0.0.3-alpha`

⚠️ Not Production or Development Ready Yet.

## Compatability
I want this library to be compatabile with other UI's you may rely on. Therefore, it comes with
an auto-prefix in order to display the components, `<x-fcui-_____>`. This is explained in detail below (coming soon).

## Roadmap 2024

The below elements will be in the initial version of Fusion Core UI with at least 1 or 2 variants.
Once these features are complete, it will signify version *1.0* of Fusion Core UI and will be considered
ready for production-level projects.

### Components

* [Alerts](#alerts)
* [Avatars](#avatars)
* [Badges](#badges)
* [Breadcrumbs](#breadcrumbs)
* [Buttons](#buttons)
* [Button Groups](#button-group)
* [Cards](#card)
* [Checkboxes](#checkboxes)
* [Dropdowns](#dropdown)
* [Headings](#heading)
* [Inputs](#input)
* [Input Groups](#input-group)
* [List Groups](#list-group)
* [Modals](#modal)
* [Nav Bars](#navbar)
* [Nav Links](#navlinks)
* ❌ [Pagination](#pagination) - Broken
* [Pricing](#pricing)
* [Progress Bars](#progress-bar)
* [Stats](#stats)
* [Switches (Radio)](#switch-radio)
* [Tables](#table)
* [Tabs](#tabs)
---

### Javascript
In order to use dismissible, modals, and You will need to ensure the JS is being loaded into your
application. 

This package has _**less than 10 lines**_ of JS currently.

---

### Icons
Most examples utilize [Fontawesome](https://fontawesome.com/) or [Heroicons](https://heroicons.com/). You can utilize a library of your choice.

---

# Examples

The examples below are to demonstrate the concept of how the components were designed and function.
More examples, list of properties and demonstration can be found on the [fusioncore.alickilabs.com]() website.

## Alerts

Full Example, includes an Icon, the Type, and a Dismissible button:

```html
<x-fcui-alert dismissible icon='<i class="fa-solid fa-house"></i>' type="info">Fusion Core UI Default Alert.</x-fcui-alert>
```

Basic Example (No, dismissible, icon, with default class):

```html
<x-fcui-alert>Alert based alert.</x-fcui-alert>
```

## Avatars

Avatar with a profile image passed in

```html
<x-fcui-avatar img="https://i.pravatar.cc/60" />
```

Large Avatar without a label

```html
<x-fcui-avatar size="lg" label="ZX" />
```

## Badges

Default badge

```html
<x-fcui-badge>Default Badge</x-fcui-badge>
```

Warning Badge

```html
<x-fcui-badge type="warning">Warning Badge</x-fcui-badge>
```

Info Badge with an Icon

```html
<x-fcui-badge type="info" icon='<i class="fa-solid fa-house"></i>'>Warning Badge</x-fcui-badge>
```

## Breadcrumbs

A basic Breadcrumb component. This accepts an array of links and their URL, which could look like the following:

```php
 $linkArr = [
    [
        "label" => "Blog",
        "url"   => "/blog"
    ],
    [
        "label" => "Articles",
        "url"   => "/blog/articles"
    ],
    [
        "label" => "New Article",
        "url"   => "/blog/articles/new-article"
    ]
];
```

```html
<x-fcui-breadcrumbs :linksArray="$linkArr"/>
```

## Buttons

A small button
```html
<x-fcui-button size="sm">Small Button</x-fcui-button>
```

A default sized button with a theme and icon
```html
<x-fcui-button type="warning" icon='<i class="fa-solid fa-star"></i>'></x-fcui-button>
```

## Button Group

```html
<x-fcui-button-group>
    <x-fcui-button :btnGroup="true" size="md" type="info" icon='<i class="fa-solid fa-star"></i>'>Button 1</x-fcui-button>
    <x-fcui-button :btnGroup="true" size="md" type="success">Button 2</x-fcui-button>
    <x-fcui-button :btnGroup="true" size="md" type="warning">Button 3</x-fcui-button>
</x-fcui-button-group>
```

## Card

```html
<x-fcui-card>
    <x-slot:image>
        <img src="https://picsum.photos/400/400" alt="Random Image">
    </x-slot:image>

    <x-slot:title>
        Hello There!
    </x-slot:title>

    <x-slot:body>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime enim ab facere laudantium necessitatibus
        distinctio ullam.
    </x-slot:body>

    <x-slot:footer>
        <x-fcui-button href="/next/page">Go To Article</x-fcui-button>
    </x-slot:footer>
</x-fcui-card>
```

## Checkboxes

```html
<x-fcui-checkbox id="checkOne">Label Goes Here</x-fcui-checkbox>

<x-fcui-checkbox id="checkTwo" labelSide="left" type="success">Example Label on the Left</x-fcui-checkbox>
```

## Dropdown

```html
<x-fcui-drop-down name="form-name">
    <x-slot:options>
        <option value="pizza">Pizza</option>
        <option value="burger" selected>Burger</option>
        <option value="hot-dog">Hot Dog</option>
    </x-slot:options>
</x-fcui-drop-down>
```

## Heading

```html
<x-fcui-heading subheading="This is a subheading." alignment="left">This is a heading!</x-fcui-heading>
```

## Input

Input with a label, placeholder text, and a tip (small text shown under input)
```html
<x-fcui-input label="Email" placeholder="example placeholder" tip="This is a helpful tip, keep it short."/>
```

Disabled input
```html
<x-fcui-input placeholder="placeholder" color="notice" disabled="true"/>
```

## Input Group

Basic input group with 3 columns
```html
<x-fcui-input-group columns="3">

    <x-fcui-input label="First Name" placeholder="First" type="success"/>

    <x-fcui-input label="Middle Name" placeholder="Middle" />

    <x-fcui-input label="Last Name" placeholder="Last" />

</x-fcui-input-group>
```
## List Group

Basic List Group with the Nav Link component
```html
 <x-fcui-list-group border="'true'" bg="transparent">

    <x-fcui-nav-link href="#" 
        classes="text-cyan-300 block hover:text-cyan-200 py-1 px-2"
        icon='<i class="fa-solid fa-face-tired"></i>'>Link 1</x-fcui-nav-link>

    <x-fcui-nav-link href="#" 
        classes="text-cyan-300 block hover:text-cyan-200 py-1 px-2"
        active="'true'"
        icon='<i class="fa-solid fa-face-smile"></i>'>Link 2</x-fcui-nav-link>

    <x-fcui-nav-link href="#" 
        classes="text-cyan-300 block hover:text-cyan-200 py-1 px-2"
        icon='<i class="fa-solid fa-face-meh"></i>'>Link 3</x-fcui-nav-link>

</x-fcui-list-group>
```

## Modal

Basic Modal

```html
<x-fcui-modal id="modal1">
    <x-slot:content>
        <p class="text-center">
            Nunc viverra eleifend risus tincidunt sodales. Pellentesque et elit ornare, lobortis diam id, facilisis odio.
        </p>
    </x-slot:content>

    <x-slot:triggerButton>
        <x-fcui-button size="default" class="show-modal1">
            Show The Modal
        </x-fcui-button>
    </x-slot:triggerButton>
</x-fcui-modal>
```

## Navbar

A basic Navbar using inline `<li>` tags. In it's current implementation it's fairly opinionated and rigid. The goal
is to make this component far more flexible than it is.

```html
<x-fcui-nav-bar>

    <x-slot:logo>
        <a class="text-4xl" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
            </svg>
        </a>
    </x-slot:logo>

    <x-slot:mobileMenuIcon>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
    </x-slot:mobileMenuIcon>

    <x-slot:links>
        <li>
            <x-fcui-nav-link>Home</x-fcui-nav-link>
        </li>

        <li>
            <x-fcui-nav-link>About Us</x-fcui-nav-link>
        </li>

        <li>
            <x-fcui-nav-link>Our Blog</x-fcui-nav-link>
        </li>

        <li>
            <x-fcui-nav-link>Contact Us</x-fcui-nav-link>
        </li>
    </x-slot:links>

    <x-slot:rightMenuButtons>
        <x-fcui-button href="#">Sign In</x-fcui-button>
    </x-slot:rightMenuButtons>

    <x-slot:mobileFooter>
        <x-fcui-button href="#" class="mx-auto w-full">Sign In</x-fcui-button>
    </x-slot:mobileFooter>

</x-fcui-nav-bar>
```

## Navlinks

A basic example of the Navlink

```html
 <x-fcui-nav-link href="/example" :active='true'>Contact Us</x-fcui-nav-link>
```

## Pagination

⚠️ This component is not functional yet.

A basic Pagination component with the `previous` and `next` buttons hidden.

```html
<x-fcui-pagination bg="transparent" :prevNextBtns="false"/>
```

## Pricing

A demonstration of the Pricing table component

```html
<x-fcui-pricing columns="3" bg="transparent">

            <x-slot:panels>

                <x-fcui-pricing-panel>

                    <x-slot:productName>Product One</x-slot:productName>

                    <x-slot:price>$20</x-slot:price>

                    <x-slot:recurring>/month</x-slot:recurring>

                    <x-slot:button>
                        <x-fcui-button href="#" class="w-full mb-6">Select</x-fcui-button>
                    </x-slot:button>

                    <x-slot:features>
                        <li><span>Feature Item One</span></li>
                        <li><span>Feature Item Two</span></li>
                        <li><span>Feature Item Three</span></li>
                    </x-slot:features>
                </x-fcui-pricing-panel>

                <x-fcui-pricing-panel>
                    <x-slot:specialText>Special!</x-slot:specialText>

                    <x-slot:productName>Product Two</x-slot:productName>

                    <x-slot:price>$30</x-slot:price>

                    <x-slot:recurring>/month</x-slot:recurring>

                    <x-slot:button>
                        <x-fcui-button href="#" class="w-full mb-6">Select</x-fcui-button>
                    </x-slot:button>

                    <x-slot:features>
                        <li><span>Feature Item One</span></li>
                        <li><span>Feature Item Two</span></li>
                        <li><span>Feature Item Three</span></li>
                    </x-slot:features>
                </x-fcui-pricing-panel>

                <x-fcui-pricing-panel>

                    <x-slot:productName>Product Three</x-slot:productName>

                    <x-slot:price>$40</x-slot:price>

                    <x-slot:recurring>/month</x-slot:recurring>

                    <x-slot:button>
                        <x-fcui-button href="#" class="w-full mb-6">Select</x-fcui-button>
                    </x-slot:button>

                    <x-slot:features>
                        <li><span>Feature Item One</span></li>
                        <li><span>Feature Item Two</span></li>
                        <li><span>Feature Item Three</span></li>
                    </x-slot:features>
                </x-fcui-pricing-panel>

            </x-slot:panels>

        </x-fcui-pricing>
```

## Progress Bar

Basic Progress bars

```html
<x-fcui-progress-bar type="success" completion="27" innerBarBg="success" height="1"></x-fcui-progress-bar>
```

## Radio Inputs

```html
<x-fcui-radio-input id="radioOneC" type="warning" name="r3">
  Radio Label Here
</x-fcui-radio-input>

<x-fcui-radio-input id="radioTwoC" type="warning" name="r3">
  Radio Label 2 Here
</x-fcui-radio-input>
```

## Stats

Basic Stats Block

```html
<x-fcui-stats bg="transparent" spacing="4">

    <x-slot:panels>

        <x-fcui-stat-block stat="249" label="Customers" type="info" />

        <x-fcui-stat-block stat="$5,810" label="Revenue This Week" type="warning" />

        <x-fcui-stat-block stat="30" label="Downloads" type="notice"/ >

        <x-fcui-stat-block stat="2,890" label="Views" />

    </x-slot:panels>

</x-fcui-stats>
```

## Switch Radio

A basic Switch (radio button) component

```html
<x-fcui-switch-radio id="uniqueId">
    A label
</x-fcui-switch-radio>
```

## Table

A basic Table example. As with the Navbar component, there is plenty to be desired when using this
component and customization / less boilerplate.

```html
<x-fcui-table headBg="success">
    <x-slot:head>
        <th scope="col" class="font-medium px-6 py-4 text-left">
            ID
        </th>
        <th scope="col" class="font-medium px-6 py-4 text-left">
            Name
        </th>
        <th scope="col" class="font-medium px-6 py-4 text-left">
            Email
        </th>
        <th scope="col" class="font-medium px-6 py-4 text-left">
            Status
        </th>
    </x-slot:head>

    <x-slot:rows>
        <x-fcui-table-row rowStyle="success">
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                43
            </td>
            <td class="font-light px-6 py-4 whitespace-nowrap">
                Thomas
            </td>
            <td class="font-light px-6 py-4 whitespace-nowrap">
                thomas@fusioncore.ui
            </td>
            <td class="font-light px-6 py-4 whitespace-nowrap">
                Active
            </td>
        </x-fcui-table-row>

        <x-fcui-table-row rowStyle="success">
             <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                49
             </td>
             <td class="font-light px-6 py-4 whitespace-nowrap">
                Charlie
             </td>
             <td class="font-light px-6 py-4 whitespace-nowrap">
                charlie@example.com
             </td>
             <td class="font-light px-6 py-4 whitespace-nowrap">
                Inactive
             </td>
        </x-fcui-table-row>
    </x-slot:rows>

</x-fcui-table>
```

## Tabs

Currently, only one style of tabs are available; the default cyan theme. 

```html
<x-fcui-tabs>
    
    <x-fcui-tab>Tab 1</x-fcui-tab>

    <x-fcui-tab>Tab 2</x-fcui-tab>

    <x-fcui-tab :active="true">Tab 3</x-fcui-tab>

    <x-fcui-tab>Tab 4</x-fcui-tab>
    
</x-fcui-tabs>
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
