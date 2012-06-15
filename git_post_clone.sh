#!/bin/bash

echo -n "Project name: "
read project_name
project_dir_unescaped=`pwd`
project_dir=${project_dir_unescaped//'/'/"\/"}

mkdir log
mkdir cache
cp config/databases.yml.dist config/databases.yml

git submodule update --init --recursive
./symfony project:permissions
./symfony plugin:publish-assets

#solo en linux
cp plugins/mpProjectPlugin/config/apache_example.conf.dist plugins/mpProjectPlugin/config/apache_example.conf
sed -i "s/PROJECT_NAME/$project_name/g" plugins/mpProjectPlugin/config/apache_example.conf
sed -i "s/PROJECT_DIR/$project_dir/g" plugins/mpProjectPlugin/config/apache_example.conf

sudo ln -s ${project_dir_unescaped}/plugins/mpProjectPlugin/config/apache_example.conf /etc/apache2/conf.d/${project_name}
sudo service apache2 graceful

echo -n "You can now test your project at http://localhost/$project_name/frontend_dev.php right away!"