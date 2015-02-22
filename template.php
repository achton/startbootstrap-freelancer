<?php
/**
 * @file
 * template.php
 */


function freelancer_preprocess_page(&$variables) {

  $user = user_load(1);

  $variables['profile_pic'] = theme('image_style',
                                array(
                                  'style_name' => 'medium',
                                  'path' => $user->picture->uri,
                                  'attributes' => array(
                                    'class' => 'img-responsive',
                                  ),
                                  'width' => NULL,
                                  'height' => NULL,
                                )
                              );
}
