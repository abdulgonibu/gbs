<?php
/**
 * 
 */

function views(string $path, array $data = []): void
   {
      // Extract the data array to use value as variable
      extract($data);
      // start output buffering
      require_once VIEWS . '/' . $path;
   }