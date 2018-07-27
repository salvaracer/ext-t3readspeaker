# ext-t3readspeaker


## What does it do?

Will add the **ReadSpeaker webReader** Service to your website. Easy to use, multi language and many voice options.

[![Readspeaker webReader](http://img-ak.verticalresponse.com/media/f/3/a/f3a027ab0e/32430ba437/59fd45a3d7/library/ReadSpeaker-webReader-video-screenshot.jpg)](https://www.youtube.com/watch?v=zMtpLuOJ3m8)


## Installation

1.  Install this extension
2.  Set your customer ID and CSS ID and your language in the CONSTANT EDITOR
3.  Add this code, where the readspeaker button should appear:

    ```html
    <f:cObject typoscriptObjectPath="lib.t3readspeaker" />
    ```


**TIP**

Try the fluid inline style:

```html
{f:cObject(typoscriptObjectPath:'lib.t3readspeaker')}
```

**Another TIP**

You can modify the button behaviour by adding some data attribute information to te fluid tag:

```html
<f:cObject typoscriptObjectPath="lib.t3readspeaker" data="{lang:'de_de',readid:'content123',urlencoded:''}" />
```

**We're open for contributions.**

- https://typo3.org/extensions/repository/view/t3readspeaker
- https://forge.typo3.org/projects/extension-t3readspeaker


## Documentation

-   **TYPO3 Extension Documentation:**

    https://docs.typo3.org/typo3cms/extensions/t3readspeaker/

## Screenshots

-   **See documentation for screenshots:**

    https://github.com/salvaracer/ext-t3readspeaker/blob/master/Documentation/Introduction/Index.rst

