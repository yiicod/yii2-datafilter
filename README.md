Data filter (Yii 2)
===================

Provides the functionality to create data filters logic. 
Using handlers you can create chains of filters.

Usage
-----
```php
$filteredData = DataFilter::filter(new MyAwesomeFilter($notFilteredData, $additionalParamsForFilteringData));
```

Where MyAwesomeFilter extends DataFilterAbstract and has list of handlers, which filters data in course.
Each handler should implements DataHandlerInterface