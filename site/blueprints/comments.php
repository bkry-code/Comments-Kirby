<?php if(!defined('KIRBY')) exit ?>

title: Comments
pages: true
files: true
fields:
  title:
    label: Title
    type: title
  comments:
    label: Content
    type: structure
    style: table
    entry: >
      {{userName}}</br>
      {{comment}}
    fields:
      username:
        label: Username
        type:  text
      comment:
        label: Comment
        type:  textarea
      timestamp:
        label: timestamp
        type: text
      id:
        label: id
        type: text