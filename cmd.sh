#!/bin/bash


if [ $# -eq 0 ]
then
  echo "Please enter arguments. You can type ./cmd.sh help to see all available options."
else
  if [ "$1" == "dbup" ]
  then
    echo "Updating the database: ";
    php bin/console make:migration && php bin/console doctrine:migrations:migrate;
  elif [ "$1" == "fixt" ]
  then
    echo "Clearing the database and updating the fixtures datas"
    php bin/console doctrine:fixtures:load;
    for obj in `ls ./public/uploads`
    do
      fichiers=`ls public/uploads/$obj`;
      if [[ $fichiers ]]
      then
        rm public/uploads/$obj/*;   
      fi
    done
  elif [ "$1" == "asset" ]
    then
    yarn run encore dev;
  elif [ "$1" == "help" ]
    then
    echo "Help printing: ";
    echo "List of available commands: ";
    echo "   - dbup:  this command updates the database";
    echo "   - fixt:  this command clears the database and the uploaded files, and then loads the fixtures datas";
    echo "   - asset: this command runs the encore package that generates the files which are in the asset directory (css and js for instance)";
    else
      echo "Unknown command, please type ./cmd.sh help to print available options"
  fi
fi
