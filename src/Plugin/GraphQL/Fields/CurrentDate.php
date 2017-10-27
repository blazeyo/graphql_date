<?php

namespace Drupal\graphql_date\Plugin\GraphQL\Fields;

use Drupal\graphql\Plugin\GraphQL\Fields\FieldPluginBase;
use Youshido\GraphQL\Execution\ResolveInfo;

/**
 * GraphQL field returning the current date.
 *
 * @GraphQLField(
 *   id = "current_date",
 *   name = "currentDate",
 *   type = "String",
 *   secure = true,
 *   response_cache_max_age = 0
 * )
 */
class CurrentDate extends FieldPluginBase {

  /**
   * {@inheritdoc}
   */
  public function resolveValues($value, array $args, ResolveInfo $info) {
    yield date('Y-m-d h:i:s');
  }

}
