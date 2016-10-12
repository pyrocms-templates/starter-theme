<?php namespace {{vendor|studly_case}}\{{slug|studly_case}}Theme;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class {{slug|studly_case}}ThemeServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 */
class {{slug|studly_case}}ThemeServiceProvider extends AddonServiceProvider
{

  /**
   * The view overrides.
   *
   * @var array
   */
  protected $overrides = [
      'streams::errors/404' => 'theme::errors/404',
      'streams::errors/500' => 'theme::errors/500',
  ];
}
