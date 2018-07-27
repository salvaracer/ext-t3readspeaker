# ext-t3readspeaker


## What does it do?

Will add the **ReadSpeaker webReader** Service to your website. Easy to use, multi language and many voice options.

[![Readspeaker webReader](http://img-ak.verticalresponse.com/media/f/3/a/f3a027ab0e/32430ba437/59fd45a3d7/library/ReadSpeaker-webReader-video-screenshot.jpg)](https://www.youtube.com/watch?v=zMtpLuOJ3m8)

(Open the link in a new window if you have problems with watching the youtube video. https://www.youtube.com/watch?v=zMtpLuOJ3m8)


## Installation

1.  Install this extension
2.  Set your customer ID and CSS ID and your language in the CONSTANT EDITOR
3.  Add this html code to an fluid template, where the ReadSpeaker webReader button should appear:

    ```html
	<f:cObject typoscriptObjectPath="lib.t3readspeaker" data="{lang:'de_de',readid:'content123',urlencoded:'...'}" />
    ```

All data-attributes are optional! The fallback are the values from the constant editor! If you leave emtpy "urlencoded", the used url will the frontend url of the current page!


**TIP** - Try the fluid inline style:

```html
{f:cObject(typoscriptObjectPath:'lib.t3readspeaker')}
```

## Plugin

We offer an extra content element made with EXT:flux to place your ReadSpeaker webReader button where you want. If you want to use it in your contentElementWizard, make sure you have EXT:flux installed!

### We're open for contribution.

- https://typo3.org/extensions/repository/view/t3readspeaker
- https://forge.typo3.org/projects/extension-t3readspeaker


## Documentation

-   **TYPO3 Extension Documentation:**

    https://docs.typo3.org/typo3cms/extensions/t3readspeaker/

## Screenshots

-   **See documentation for screenshots:**

    https://github.com/salvaracer/ext-t3readspeaker/blob/master/Documentation/Introduction/Index.rst

