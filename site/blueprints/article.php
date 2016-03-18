<?php if(!defined('KIRBY')) exit ?>

title: Article
pages:
  template: comments
files: true
fields:
  title:
    label: Title
    type: title
  date:
    label: Date
    type: date
    width: 1/2
    default: today
  author:
    label: Author
    type: user
    width: 1/2
  tags:
    label: Tags
    type: tags
  text:
    label: Text
    type: textarea
  line:
    type: line
  comments:
    label: Comments
    type: structure
    entry: >
      <b>{{username}}</b> {{date}} {{time}}<br>
      ({{email}})<br />
      {{message}}
    fields:
      date:
        width: 1/2
        label: Date
        type: date
        default: today
        validate: date
      time:
        width: 1/2
        label: Time
        type: time
        default: now
        validate: time
        interval: 1
      username:
        label: Username
        type: text
      email: Email
        type: email
        validate: email
      message: Comment
        type: textarea