<?php if(!defined('KIRBY')) exit ?>

title: Blog
pages:
  template: article
  sort: flip
files: true
fields:
  title:
    label: Page
    type:  text
  subtitle:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea