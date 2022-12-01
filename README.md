# Feratel Commons Library

Provides the most basic PHP implementation of the Deskline Standard Interface (DSI) provided by [Feratel](www.feratel.com).

Online documentation: https://fdcwiki.deskline.net/pages/viewpage.action?pageId=54231347

## Usage

Add to composer.json's required list to use in a project.

## Maintenance

Maintenance might be necessary on Feratel Dsi changes.

- patch the `xsd2php` library (does not work once the patches have been applied successfully)
  ```shell
  composer generate-patch
  ```

- Generate PHP classes
  ```shell
  composer generate
  ```

- Run tests to see if anything breaks
  ```shell
  composer test
  ```