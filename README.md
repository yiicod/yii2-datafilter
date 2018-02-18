Yii Data filter extension
=========================

[![Latest Stable Version](https://poser.pugx.org/yiicod/yii2-datafilter/v/stable)](https://packagist.org/packages/yiicod/yii2-datafilter) [![Total Downloads](https://poser.pugx.org/yiicod/yii2-datafilter/downloads)](https://packagist.org/packages/yiicod/yii2-datafilter) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/yiicod/yii2-datafilter/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/yiicod/yii2-datafilter/?branch=master)[![Code Climate](https://codeclimate.com/github/yiicod/yii2-datafilter/badges/gpa.svg)](https://codeclimate.com/github/yiicod/yii2-datafilter)

Provides the functionality to create data filters logic. 
Using handlers you can create chains of filters.

#### Usage

```php
$filteredData = DataFilter::filter(new MyAwesomeFilter($notFilteredData, $additionalParamsForFilteringData));
```

Where MyAwesomeFilter extends DataFilterAbstract and has list of handlers, which filters data in course.
Each handler should implements DataHandlerInterface