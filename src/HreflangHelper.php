<?php

namespace Drupal\domain_hreflang;

class HreflangHelper {
  
  /**
   * Outputs the tag.
   * @param $url
   *    The URL to output as the href attribute.
   * @param $hreflang
   *    The language code to output as the hreflang attribute.
   * @param $name
   *    Unique name to assign to this tag.
   */
  public static function addTag($url, $hreflang, $name) {
    $tag = [
      '#tag' => 'link',
      '#attributes' => [
        'href' => $url,
        'rel' => 'alternate',
        'hreflang' => $hreflang,
      ],
    ];
    return [$tag, $name];
  }
  
  /**
   * Returns an array of language codes.
   */
  public static function getLangCodes() {
    return [
      'en' => 'en',
      'en-au' => 'en-au',
      'en-ca' => 'en-ca',
      'en-gb' => 'en-gb',
      'en-ie' => 'en-ie',
      'en-nz' => 'en-nz',
      'en-us' => 'en-us',
      'en-za' => 'en-za',
    ];
  }
}
