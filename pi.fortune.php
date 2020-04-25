<?php

namespace Ruscoe\Fortune;

if (!defined('BASEPATH')) {
  exit('Direct access to add-ons forbidden.');
}

class Fortune
{
  /** @var string the fortune text to be outputted */
  public $return_data;

  /** @var array the fortunes that may appear */
  private $fortunes = [];

  /**
  * Constructor.
  */
  public function __construct()
  {
    $this->setFortunes();

    $this->return_data = $this->fortunes[rand(0, count($this->fortunes) - 1)];
  }

  private function setFortunes() {
    $this->fortunes = [
      'You have a strong desire for a home and your family interests come first.',
      'You may be infinitely smaller than some things, but you\'re infinitely larger than others.',
      'You have a deep appreciation of the arts and music.',
      'You will be awarded some great honor.',
      'Your business will assume vast proportions.',
      'Reply hazy, ask again later.',
      'Good day for overcoming obstacles. Try a steeplechase.',
      'You can do very well in speculation where land or anything to do with dirt is concerned.',
      'Look afar and see the end from the beginning.',
      'If you learn one useless thing every day, in a single year you\'ll learn 365 useless things.',
      'You get along very well with everyone except animals and people.',
      'Make a wish, it might come true.',
      'You\'re growing out of some of your problems, but there are others that you\'re growing into.',
      'You will reach the highest possible point in your business or profession.',
      'A visit to a strange place will bring fresh work.',
      'Tuesday is the Wednesday of the rest of your life.',
      'You have no real enemies.',
      'Don\'t hate yourself in the morning -- sleep till noon.',
      'Keep emotionally active. Cater to your favorite neurosis.',
      'There is a 20% chance of tomorrow.',
      'You single-handedly fought your way into this hopeless mess.',
      'You never hesitate to tackle the most difficult problems.',
      'Good news from afar can bring you a welcome visitor.',
      'Everything will be just tickety-boo today.',
    ];
  }

}
