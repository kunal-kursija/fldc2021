#!/usr/bin/env sh

# Print message.
echo 'Hello Everyone, Lets create files directory if does not exists.';

# Change directory.
cd web/sites/default;

# create files directory if it does not exists.
if [ ! -d files ]; then
  mkdir -p files && chmod -R 0777 files;
  echo "created the files directory.";
  drush cr;
fi

