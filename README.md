# Сервис по обработке xml фида

Принцип работы. 

Читает xml фид и на выходе получаете масив объектов. Настроен на получение категорий и офферов, поддерживает возможность создания своих обработчиков и моделей с разной структурой данных.

### Пример работы

```php
use Sakharov\SupplierDataManager\FeedDataManager;

$feedDataManager = new FeedDataManager('https://supplier.xml', 'TechnoVector');

$feedDataManager->load()->categories();
$feedDataManager->load()->offers();
```

где TechnoVector - часть класса обработчика фида.
