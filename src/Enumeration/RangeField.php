<?php declare(strict_types=1);


namespace Trefle\Enumeration;

use MyCLabs\Enum\Enum;

/**
 * @method static RangeField ATMOSPHERIC_HUMIDITY()
 * @method static RangeField AVERAGE_HEIGHT_CM()
 * @method static RangeField DAYS_TO_HARVEST()
 * @method static RangeField FROST_FREE_DAYS_MINIMUM()
 * @method static RangeField GROUND_HUMIDITY()
 * @method static RangeField IMAGES_COUNT()
 * @method static RangeField LIGHT()
 * @method static RangeField MAXIMUM_HEIGHT_CM()
 * @method static RangeField MAXIMUM_PRECIPITATION_MM()
 * @method static RangeField MAXIMUM_TEMPERATURE_DEG_C()
 * @method static RangeField MAXIMUM_TEMPERATURE_DEG_F()
 * @method static RangeField MINIMUM_PRECIPITATION_MM()
 * @method static RangeField MINIMUM_ROOT_DEPTH_CM()
 * @method static RangeField MINIMUM_TEMPERATURE_DEG_C()
 * @method static RangeField MINIMUM_TEMPERATURE_DEG_F()
 * @method static RangeField PH_MAXIMUM()
 * @method static RangeField PH_MINIMUM()
 * @method static RangeField PLANTING_DAYS_TO_HARVEST()
 * @method static RangeField PLANTING_ROW_SPACING_CM()
 * @method static RangeField PLANTING_SPREAD_CM()
 * @method static RangeField SOIL_NUTRIMENTS()
 * @method static RangeField SOIL_SALINITY()
 * @method static RangeField SOIL_TEXTURE()
 * @method static RangeField SOURCES_COUNT()
 * @method static RangeField SYNONYMS_COUNT()
 * @method static RangeField TOXICITY()
 * @method static RangeField YEAR()
 */
final class RangeField extends Enum
{
    public const ATMOSPHERIC_HUMIDITY = 'atmospheric_humidity';
    public const AVERAGE_HEIGHT_CM = 'average_height_cm';
    public const DAYS_TO_HARVEST = 'days_to_harvest';
    public const FROST_FREE_DAYS_MINIMUM = 'frost_free_days_minimum';
    public const GROUND_HUMIDITY = 'ground_humidity';
    public const IMAGES_COUNT = 'images_count';
    public const LIGHT = 'light';
    public const MAXIMUM_HEIGHT_CM = 'maximum_height_cm';
    public const MAXIMUM_PRECIPITATION_MM = 'maximum_precipitation_mm';
    public const MAXIMUM_TEMPERATURE_DEG_C = 'maximum_temperature_deg_c';
    public const MAXIMUM_TEMPERATURE_DEG_F = 'maximum_temperature_deg_f';
    public const MINIMUM_PRECIPITATION_MM = 'minimum_precipitation_mm';
    public const MINIMUM_ROOT_DEPTH_CM = 'minimum_root_depth_cm';
    public const MINIMUM_TEMPERATURE_DEG_C = 'minimum_temperature_deg_c';
    public const MINIMUM_TEMPERATURE_DEG_F = 'minimum_temperature_deg_f';
    public const PH_MAXIMUM = 'ph_maximum';
    public const PH_MINIMUM = 'ph_minimum';
    public const PLANTING_DAYS_TO_HARVEST = 'planting_days_to_harvest';
    public const PLANTING_ROW_SPACING_CM = 'planting_row_spacing_cm';
    public const PLANTING_SPREAD_CM = 'planting_spread_cm';
    public const SOIL_NUTRIMENTS = 'soil_nutriments';
    public const SOIL_SALINITY = 'soil_salinity';
    public const SOIL_TEXTURE = 'soil_texture';
    public const SOURCES_COUNT = 'sources_count';
    public const SYNONYMS_COUNT = 'synonyms_count';
    public const TOXICITY = 'toxicity';
    public const YEAR = 'year';
}
