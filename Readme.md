# Smarty Redirection

This module adds a smarty function to redirect the user directly from a template

## Installation

### Manually

* Copy the module into ```<thelia_root>/local/modules/``` directory and be sure that the name of the module is SmartyRedirection.
* Activate it in your thelia administration panel


## Usage

You can use the ```{phone}``` or ```{desktop}``` return true


## Example

```smarty
{if {phone}}
    View Phone
{/if}
```

```smarty
{if {desktop}}
    View Desktop
{/if}
```
