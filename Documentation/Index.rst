.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. ==================================================
.. DEFINE SOME TEXTROLES
.. --------------------------------------------------
.. role::   underline
.. role::   typoscript(code)
.. role::   ts(typoscript)
:class:  typoscript
.. role::   php(code)

=============
EXT:phpoffice
=============

:Created:
	      2013-10-14 17::3:3:

:Changed by:
	      Kay Strobach

:Changed:
	      2013-10-14 17::3:3:

:Classification:
	      phpoffice

:Description:
	      The keywords help with categorizing and tagging of the manuals. You can combine two or more keywords and add additional keywords yourself. Please use at least one keyword from both lists. If your manual is NOT in english, see next tab "language" ---- forEditors (use this for editors / german "Redakteure") forAdmins (use this for Administrators) forDevelopers (use this for Developers) forBeginners (manuals covering TYPO3 basics) forIntermediates (manuals going into more depth) forAdvanced (covering the most advanced TYPO3 topics) see more: http://wiki.typo3.org/doc_template#tags ----

:Keywords:
	      phpoffice phpexcel phpword phpvisio phppowerpoint phpproject

:Author:
	      Kay Strobach

:Email:
	      typo3@kay-strobach.de

:Info 4:


:Language:
	      en



.. sectnum::
.. contents::
:backlinks: top

EXT:phpoffice -phpofficeAppendix


EXT:phpoffice
====================

Extension Key: phpoffice

Language: en

Keywords: phpoffice phpexcel phpword phpvisio phppowerpoint phpproject

Copyright 2012-2013, Kay Strobach, <typo3@kay-strobach.de>

This document is published under the Open Content License

available from http://www.opencontent.org/opl.shtml

The content of this document is related to TYPO3

\- a GNU/GPL CMS/Framework available from www.typo3.org


What does it do?
----------------

This extension includes the famous phpoffice libraries.

To use the libraries call

::

    Tx_Phpoffice_Utility_InitUtility::init('PHPExcel');


If you want to use a different Library simply call it with the according library as parameter.