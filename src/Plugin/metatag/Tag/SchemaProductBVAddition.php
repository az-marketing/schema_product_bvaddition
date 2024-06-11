<?php

namespace Drupal\schema_product_bvaddition\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaNameBase;

/**
 * Provides a plugin for the 'schema_product_@id' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_product_@id",
 *   label = @Translation("@id"),
 *   description = @Translation("Put product URL here for Bazaarvoice."),
 *   name = "@id",
 *   group = "schema_product",
 *   weight = -1,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaProductBVAddition extends SchemaNameBase {
}
