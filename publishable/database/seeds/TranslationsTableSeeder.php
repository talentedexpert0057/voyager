<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Translation;

class TranslationsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $this->pagesTranslations();
        $this->menusTranslations();
    }


    /**
     * Auto generate Pages Translations.
     *
     * @return void
     */
    private function pagesTranslations()
    {
        $page = Page::where('slug', 'hello-world')->firstOrFail();
        if ($page->exists) {
            $_row = ['table' => 'pages', 'column_name' => 'title', 'foreign_key' => $page->id];
            $_trs = Translation::firstOrNew([
                'locale'      => 'en',
                'title'       => 'Hello World',
                'foreign_key' => $page->id,
            ]);
            if (!$_trs->exists) {
                $_trs->fill(array_merge($_row, [
                    'locale' => 'en',
                    'value'  => 'Hello World',
                ])->save();
            }
            $_trs = Translation::firstOrNew([
                'locale'      => 'pt',
                'title'       => 'Olá Mundo',
                'foreign_key' => $page->id,
            ]);
            if (!$_trs->exists) {
                $_trs->fill(array_merge($_row, [
                    'locale' => 'pt',
                    'value'  => 'Olá Mundo',
                ])->save();
            }

            $_row = ['table' => 'pages', 'column_name' => 'slug', 'foreign_key' => $page->id];
            $_trs = Translation::firstOrNew([
                'locale'      => 'en',
                'slug'        => 'hello-world',
                'foreign_key' => $page->id,
            ]);
            if (!$_trs->exists) {
                $_trs->fill(array_merge($_row, [
                    'locale' => 'en',
                    'value'  => 'hello-world',
                ])->save();
            }
            $_trs = Translation::firstOrNew([
                'locale'      => 'pt',
                'slug'        => 'ola-mundo',
                'foreign_key' => $page->id,
            ]);
            if (!$_trs->exists) {
                $_trs->fill(array_merge($_row, [
                    'locale' => 'pt',
                    'value'  => 'ola-mundo',
                ])->save();
            }
        }
    }


    /**
     * Auto generate Menus Translations.
     *
     * @return void
     */
    private function menusTranslations()
    {
        $menuItem = MenuItem::where('title', 'Dashboard')->firstOrFail();
        if ($menuItem->exists) {
            $_row = ['table' => 'menu_items', 'column_name' => 'title', 'foreign_key' => $menuItem->id];
            $_trs = Translation::firstOrNew([
                'locale'      => 'en',
                'title'       => 'Dashboard',
                'foreign_key' => $menuItem->id,
            ]);
            if (!$_trs->exists) {
                $_trs->fill(array_merge($_row, [
                    'locale' => 'en',
                    'value'  => 'Dashboard',
                ])->save();
            }
            $_trs = Translation::firstOrNew([
                'locale'      => 'pt',
                'title'       => 'Painel de Controle',
                'foreign_key' => $menuItem->id,
            ]);
            if (!$_trs->exists) {
                $_trs->fill(array_merge($_row, [
                    'locale' => 'pt',
                    'value'  => 'Painel de Controle',
                ])->save();
            }
        }

        $menuItem = MenuItem::where('title', 'Media')->firstOrFail();
        if ($menuItem->exists) {
            $_row = ['table' => 'menu_items', 'column_name' => 'title', 'foreign_key' => $menuItem->id];
            $_trs = Translation::firstOrNew([
                'locale'      => 'en',
                'title'       => 'Media',
                'foreign_key' => $menuItem->id,
            ]);
            if (!$_trs->exists) {
                $_trs->fill(array_merge($_row, [
                    'locale' => 'en',
                    'value'  => 'Media',
                ])->save();
            }
            $_trs = Translation::firstOrNew([
                'locale'      => 'pt',
                'title'       => 'Media',
                'foreign_key' => $menuItem->id,
            ]);
            if (!$_trs->exists) {
                $_trs->fill(array_merge($_row, [
                    'locale' => 'pt',
                    'value'  => 'Media',
                ])->save();
            }
        }

        $menuItem = MenuItem::where('title', 'Posts')->firstOrFail();
        if ($menuItem->exists) {
            $_row = ['table' => 'menu_items', 'column_name' => 'title', 'foreign_key' => $menuItem->id];
            $_trs = Translation::firstOrNew([
                'locale'      => 'en',
                'title'       => 'Posts',
                'foreign_key' => $menuItem->id,
            ]);
            if (!$_trs->exists) {
                $_trs->fill(array_merge($_row, [
                    'locale' => 'en',
                    'value'  => 'Posts',
                ])->save();
            }
            $_trs = Translation::firstOrNew([
                'locale'      => 'pt',
                'title'       => 'Publicações',
                'foreign_key' => $menuItem->id,
            ]);
            if (!$_trs->exists) {
                $_trs->fill(array_merge($_row, [
                    'locale' => 'pt',
                    'value'  => 'Publicações',
                ])->save();
            }
        }

        $menuItem = MenuItem::where('title', 'Users')->firstOrFail();
        if ($menuItem->exists) {
            $_row = ['table' => 'menu_items', 'column_name' => 'title', 'foreign_key' => $menuItem->id];
            $_trs = Translation::firstOrNew([
                'locale'      => 'en',
                'title'       => 'Users',
                'foreign_key' => $menuItem->id,
            ]);
            if (!$_trs->exists) {
                $_trs->fill(array_merge($_row, [
                    'locale' => 'en',
                    'value'  => 'Users',
                ])->save();
            }
            $_trs = Translation::firstOrNew([
                'locale'      => 'pt',
                'title'       => 'Utilizadores',
                'foreign_key' => $menuItem->id,
            ]);
            if (!$_trs->exists) {
                $_trs->fill(array_merge($_row, [
                    'locale' => 'pt',
                    'value'  => 'Utilizadores',
                ])->save();
            }
        }

        $menuItem = MenuItem::where('title', 'Categories')->firstOrFail();
        if ($menuItem->exists) {
            $_row = ['table' => 'menu_items', 'column_name' => 'title', 'foreign_key' => $menuItem->id];
            $_trs = Translation::firstOrNew([
                'locale'      => 'en',
                'title'       => 'Categories',
                'foreign_key' => $menuItem->id,
            ]);
            if (!$_trs->exists) {
                $_trs->fill(array_merge($_row, [
                    'locale' => 'en',
                    'value'  => 'Categories',
                ])->save();
            }
            $_trs = Translation::firstOrNew([
                'locale'      => 'pt',
                'title'       => 'Categorias',
                'foreign_key' => $menuItem->id,
            ]);
            if (!$_trs->exists) {
                $_trs->fill(array_merge($_row, [
                    'locale' => 'pt',
                    'value'  => 'Categorias',
                ])->save();
            }
        }

        $menuItem = MenuItem::where('title', 'Pages')->firstOrFail();
        if ($menuItem->exists) {
            $_row = ['table' => 'menu_items', 'column_name' => 'title', 'foreign_key' => $menuItem->id];
            $_trs = Translation::firstOrNew([
                'locale'      => 'en',
                'title'       => 'Pages',
                'foreign_key' => $menuItem->id,
            ]);
            if (!$_trs->exists) {
                $_trs->fill(array_merge($_row, [
                    'locale' => 'en',
                    'value'  => 'Pages',
                ])->save();
            }
            $_trs = Translation::firstOrNew([
                'locale'      => 'pt',
                'title'       => 'Páginas',
                'foreign_key' => $menuItem->id,
            ]);
            if (!$_trs->exists) {
                $_trs->fill(array_merge($_row, [
                    'locale' => 'pt',
                    'value'  => 'Páginas',
                ])->save();
            }
        }

        $menuItem = MenuItem::where('title', 'Roles')->firstOrFail();
        if ($menuItem->exists) {
            $_row = ['table' => 'menu_items', 'column_name' => 'title', 'foreign_key' => $menuItem->id];
            $_trs = Translation::firstOrNew([
                'locale'      => 'en',
                'title'       => 'Roles',
                'foreign_key' => $menuItem->id,
            ]);
            if (!$_trs->exists) {
                $_trs->fill(array_merge($_row, [
                    'locale' => 'en',
                    'value'  => 'Roles',
                ])->save();
            }
            $_trs = Translation::firstOrNew([
                'locale'      => 'pt',
                'title'       => 'Funções',
                'foreign_key' => $menuItem->id,
            ]);
            if (!$_trs->exists) {
                $_trs->fill(array_merge($_row, [
                    'locale' => 'pt',
                    'value'  => 'Funções',
                ])->save();
            }
        }

        $menuItem = MenuItem::where('title', 'Tools')->firstOrFail();
        if ($menuItem->exists) {
            $_row = ['table' => 'menu_items', 'column_name' => 'title', 'foreign_key' => $menuItem->id];
            $_trs = Translation::firstOrNew([
                'locale'      => 'en',
                'title'       => 'Tools',
                'foreign_key' => $menuItem->id,
            ]);
            if (!$_trs->exists) {
                $_trs->fill(array_merge($_row, [
                    'locale' => 'en',
                    'value'  => 'Tools',
                ])->save();
            }
            $_trs = Translation::firstOrNew([
                'locale'      => 'pt',
                'title'       => 'Ferramentas',
                'foreign_key' => $menuItem->id,
            ]);
            if (!$_trs->exists) {
                $_trs->fill(array_merge($_row, [
                    'locale' => 'pt',
                    'value'  => 'Ferramentas',
                ])->save();
            }
        }

        $menuItem = MenuItem::where('title', 'Menu Builder')->firstOrFail();
        if ($menuItem->exists) {
            $_row = ['table' => 'menu_items', 'column_name' => 'title', 'foreign_key' => $menuItem->id];
            $_trs = Translation::firstOrNew([
                'locale'      => 'en',
                'title'       => 'Menu Builder',
                'foreign_key' => $menuItem->id,
            ]);
            if (!$_trs->exists) {
                $_trs->fill(array_merge($_row, [
                    'locale' => 'en',
                    'value'  => 'Menu Builder',
                ])->save();
            }
            $_trs = Translation::firstOrNew([
                'locale'      => 'pt',
                'title'       => 'Menus',
                'foreign_key' => $menuItem->id,
            ]);
            if (!$_trs->exists) {
                $_trs->fill(array_merge($_row, [
                    'locale' => 'pt',
                    'value'  => 'Menus',
                ])->save();
            }
        }

        $menuItem = MenuItem::where('title', 'Database')->firstOrFail();
        if ($menuItem->exists) {
            $_row = ['table' => 'menu_items', 'column_name' => 'title', 'foreign_key' => $menuItem->id];
            $_trs = Translation::firstOrNew([
                'locale'      => 'en',
                'title'       => 'Database',
                'foreign_key' => $menuItem->id,
            ]);
            if (!$_trs->exists) {
                $_trs->fill(array_merge($_row, [
                    'locale' => 'en',
                    'value'  => 'Database',
                ])->save();
            }
            $_trs = Translation::firstOrNew([
                'locale'      => 'pt',
                'title'       => 'Base de dados',
                'foreign_key' => $menuItem->id,
            ]);
            if (!$_trs->exists) {
                $_trs->fill(array_merge($_row, [
                    'locale' => 'pt',
                    'value'  => 'Base de dados',
                ])->save();
            }
        }

        $menuItem = MenuItem::where('title', 'Settings')->firstOrFail();
        if ($menuItem->exists) {
            $_row = ['table' => 'menu_items', 'column_name' => 'title', 'foreign_key' => $menuItem->id];
            $_trs = Translation::firstOrNew([
                'locale'      => 'en',
                'title'       => 'Settings',
                'foreign_key' => $menuItem->id,
            ]);
            if (!$_trs->exists) {
                $_trs->fill(array_merge($_row, [
                    'locale' => 'en',
                    'value'  => 'Settings',
                ])->save();
            }
            $_trs = Translation::firstOrNew([
                'locale'      => 'pt',
                'title'       => 'Configurações',
                'foreign_key' => $menuItem->id,
            ]);
            if (!$_trs->exists) {
                $_trs->fill(array_merge($_row, [
                    'locale' => 'pt',
                    'value'  => 'Configurações',
                ])->save();
            }
        }
    }
}
