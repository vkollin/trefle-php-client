<?php declare(strict_types=1);


namespace Trefle\Enumeration;

use MyCLabs\Enum\Enum;

/**
 * @method static FilterField AUTHOR()
 * @method static FilterField BLOOM_MONTHS()
 * @method static FilterField COMMON_NAME()
 * @method static FilterField DAYS_TO_HARVEST()
 * @method static FilterField DURATION()
 * @method static FilterField ESTABLISHMENT()
 * @method static FilterField EDIBLE()
 * @method static FilterField EDIBLE_PART()
 * @method static FilterField FAMILY_COMMON_NAME()
 * @method static FilterField FAMILY_NAME()
 * @method static FilterField FLOWER_COLOR()
 * @method static FilterField FLOWER_CONSPICUOUS()
 * @method static FilterField FOLIAGE_COLOR()
 * @method static FilterField FOLIAGE_TEXTURE()
 * @method static FilterField FRUIT_COLOR()
 * @method static FilterField FRUIT_CONSPICUOUS()
 * @method static FilterField FRUIT_MONTHS()
 * @method static FilterField FRUIT_SEED_PERSISTENCE()
 * @method static FilterField GENUS_NAME()
 * @method static FilterField GROWTH_FORM()
 * @method static FilterField GROWTH_HABIT()
 * @method static FilterField GROWTH_MONTHS()
 * @method static FilterField GROWTH_RATE()
 * @method static FilterField LEAF_RETENTION()
 * @method static FilterField LIGNEOUS_TYPE()
 * @method static FilterField RANK()
 * @method static FilterField SCIENTIFIC_NAME()
 * @method static FilterField STATUS()
 * @method static FilterField VEGETABLE()
 */
final class FilterField extends Enum
{
    public const AUTHOR = 'author';
    public const BLOOM_MONTHS = 'bloom_months';
    public const COMMON_NAME = 'common_name';
    public const DAYS_TO_HARVEST = 'days_to_harvest';
    public const DURATION = 'duration';
    public const ESTABLISHMENT = 'establishment';
    public const EDIBLE = 'edible';
    public const EDIBLE_PART = 'edible_part';
    public const FAMILY_COMMON_NAME = 'family_common_name';
    public const FAMILY_NAME = 'family_name';
    public const FLOWER_COLOR = 'flower_color';
    public const FLOWER_CONSPICUOUS = 'flower_conspicuous';
    public const FOLIAGE_COLOR = 'foliage_color';
    public const FOLIAGE_TEXTURE = 'foliage_texture';
    public const FRUIT_COLOR = 'fruit_color';
    public const FRUIT_CONSPICUOUS = 'fruit_conspicuous';
    public const FRUIT_MONTHS = 'fruit_months';
    public const FRUIT_SEED_PERSISTENCE = 'fruit_seed_persistence';
    public const GENUS_NAME = 'genus_name';
    public const GROWTH_FORM = 'growth_form';
    public const GROWTH_HABIT = 'growth_habit';
    public const GROWTH_MONTHS = 'growth_months';
    public const GROWTH_RATE = 'growth_rate';
    public const LEAF_RETENTION = 'leaf_retention';
    public const LIGNEOUS_TYPE = 'ligneous_type';
    public const RANK = 'rank';
    public const SCIENTIFIC_NAME = 'scientific_name';
    public const STATUS = 'status';
    public const VEGETABLE = 'vegetable';
}
