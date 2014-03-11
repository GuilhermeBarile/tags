// add models to the global namespace

var models = {};


models.Tag = metaproject.Model({
    id: null,
    label: null
}).bind('../objectiveweb/index.php/tag');

models.Item = metaproject.Model({
    id: null,
    name: null,
    tags: []
}).bind('../objectiveweb/index.php/item');
