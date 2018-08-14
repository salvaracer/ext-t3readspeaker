.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt


.. _introduction:

Introduction
============


.. _what-it-does:

What does it do?
----------------

Will add the ReadSpeaker Service to your website. Easy to use, multi language and many voice options.


Watch the ReadSpeaker webReader introduction video: https://www.youtube.com/watch?v=zMtpLuOJ3m8&feature=youtu.be

.. figure:: ../Images/webreader_yt.jpg
   :width: 689px
   :alt: ReadSpeaker webReader introduction video


.. _screenshots:

Screenshots
-----------

Fluid usage

.. figure:: ../Images/fluid.png
   :width: 689px
   :alt: Fluid template usage

   Fluid template usage

Frontend reading

.. figure:: ../Images/rsreading.png
   :width: 668px
   :alt: ReadSpeaker reading text

   ReadSpeaker reading text

Frontend closed

.. figure:: ../Images/rsclosed.png
   :width: 159px
   :alt: ReadSpeaker Button

   ReadSpeaker Button


.. _installation:

Installation
------------

#.  Install this extension
#.  Set your customer ID and CSS ID and your language in the CONSTANT EDITOR
#.  Add this html code to an fluid template, where the ReadSpeaker webReader button should appear: <f:cObject typoscriptObjectPath="lib.t3readspeaker" data="{lang:'de_de',readid:'content123',urlencoded:'...'}" />

All data-attributes are optional! The fallback are the values from the constant editor! If you leave emtpy "urlencoded", the used url will the frontend url of the current page!


.. tip::

   Try the fluid inline style: {f:cObject(typoscriptObjectPath:'lib.t3readspeaker')}


Constant Editor

.. figure:: ../Images/constants.png
   :width: 753px
   :alt: Constant Editor -> TYPO3 ReadSpeaker

   ReadSpeaker Settings

   Set your "customerid", your "readid" and "language" in the constant editor.


Plugins
-------

We offer two content element made with EXT:flux to place your ReadSpeaker webReader button and your ReadSpeaker docReader Buttons where you want. If you want to use it in your contentElementWizard, make sure you have EXT:flux installed!
