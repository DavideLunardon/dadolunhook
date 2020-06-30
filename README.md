# dadolunhook
CaptainHook extension adding customized hooks
Thanks for the amazing work made by CaptainHook ( https://github.com/CaptainHookPhp/captainhook ) by sebastianfeldmann!

## How it works
This repo must be forked letting you specify your new amazing hooks into DadolunHook\App\Runner\Configurator\Setup\Dadolun class. This is only an example to how captainhook original extension can be extented and customized with new hooks without touching the original repo.

## Installation

Add the dependency to your `composer.json`:

    {
      ...
      "require-dev": {
        ...
        "dadolun95/dadolunhook": "dev-master",
        ...
      },
      "repositories": [
        ...
        {
          "type": "vcs",
          "url":  "git@github.com:dadolun95/dadolunhook.git"
        },
        ...
      ],
      ...
    }

Use *Composer* to install *DadolunHook*.
```bash
    $ composer require --dev davidelunardon/dadolunhook
```

## Setup
After installing DadolunHook you can use the *dadolunhook* executable to create a configuration.
```bash
    $ vendor/bin/dadolunhook dadolunconfigure 
```

Now there should be a *captainhook.json* configuration file.

Now you can run the following *captainhook* command.
```bash
    $ vendor/bin/captainhook install
```

Here's an example *captainhook.json* configuration file.
```json
{
  "commit-msg": {
    "enabled": true,
    "actions": [
      {
        "action": "\\CaptainHook\\App\\Hook\\Message\\Action\\Beams",
        "options": []
      }
    ]
  },
  "pre-commit": {
    "enabled": true,
    "actions": [
      {
        "action": "phpunit"
      },
      {
        "action": "phpcs --standard=psr2 src"
      }
    ]
  },
  "pre-push": {
    "enabled": false,
    "actions": []
  }
}
```
