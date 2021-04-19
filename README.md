# Trefle.io PHP client

This is a PHP client for trefle.io

## Usage

Search for species with specific attributes:
```
$client = Client::create('your-token-from-trefle.io');

$response = $client
    ->searchSpecies()
    ->range(RangeField::PH_MAXIMUM(), 0, 5)
    ->range(RangeField::LIGHT(), 0, 5)
    ->filter(FilterField::BLOOM_MONTHS(), Month::JAN())
    ->fetch();
```


## Implemented Endpoints

- [x] /kingdoms
- [x] /kingdoms/{id}

- [x] /subkingdoms
- [x] /subkingdoms/{id}

- [x] /divisions
- [x] /divisions/{id}

- [x] /division_classes
- [x] /division_classes/{id}

- [x] /division_orders
- [x] /division_orders/{id}

- [x] /families
- [x] /families/{id}

- [x] /genus
- [x] /genus/{id}

- [x] /plants _(simple list w/o filters)_
- [x] /plants/{id}
- [x] /plants/search


- [x] /species _(simple list w/o filters)_
- [x] /species/{id}
- [x] /species/search

- [ ] /distributions
- [ ] /distributions/{id}
- [ ] /distributions/{id}/plants
