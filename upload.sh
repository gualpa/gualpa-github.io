#! /bin/bash
# ssh-keygen (en la PC --> abrir la key que se llama .pub --> llevar al navegador)
# git clone XXXXX (copiar desde el navegador desde CODE --SSH)

git status
git add -A .
echo '###########################################################'
echo 'Input text para el commit:'
read accion
git commit -m "$accion"
echo '###########################################################'
git status
git push origin main  #(lleva al navegador)


#-----------
#git pull (trae desde el navegador)
