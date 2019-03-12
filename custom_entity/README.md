Custom Entity
=============
Practice module to create custom entities.

This module create Foo custom entity with CRUD actions.

* Admin Foo entity:
  * Path: admin/structure/custom_entity_foo/settings
  * Permission: administer custom_entity_foo entity
  * Class: Form\FooSettingsForm
* List Foo items:
  * Path: custom_entity_foo/list
  * Permission: view custom_entity_foo entity
  * Class: Entity\Controller\FooListBuilder
* Add new Foo
  * Path: custom_entity_foo/add
  * Permission: add custom_entity_foo entity
  * Class: Form\FooForm
* Edit Foo
  * Path: custom_entity_foo/%/edit
  * Permission: edit custom_entity_foo entity
  * Class: Form\FooForm
* Delete Foo
  * Path: custom_entity_foo/%/delete
  * Permission: delete custom_entity_foo entity
  * Class: Form\FooDeleteForm

