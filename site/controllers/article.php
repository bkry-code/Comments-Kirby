<?php

return function($site, $pages, $page) {

  $alert = null;
  if(get('submit')) {

    $data = array(
      'username' => $site->user()->username(),
      'email'    => $site->user()->email(),
      'message'  => filter_var( get('message'), FILTER_SANITIZE_STRING),
      'date'     => date('Y-m-d'),
      'time'     => date('H:i'),
    );
    $rules = array(
      'message'  => array('required', 'min' => 1, 'max' => 1024),
    );
    $messages = array(
      'message'  => 'Please enter a text between 1 and 1024 characters'
    );

    // some of the data is invalid
    if($invalid = invalid($data, $rules, $messages)) {
      $alert = $invalid;
    // the data is fine, let's save the comment
    } else {

      try {

        $comments = yaml($page->comments());
        $comments[] = $data;

        page()->update(array(
          'comments' => yaml::encode($comments),
        ));

        go($site->page()->url());

      } catch(Exception $e) {

          echo $e->getMessage();

        }

    }
  }

  return compact('alert');

};