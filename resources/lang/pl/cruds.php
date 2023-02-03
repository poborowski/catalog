<?php

return [
    'userManagement' => [
        'title'          => 'Użytkownicy',
        'title_singular' => 'Użytkownicy',
    ],
    'permission' => [
        'title'          => 'Uprawnienia',
        'title_singular' => 'Uprawnienie',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Role',
        'title_singular' => 'Rola',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Użytkownicy',
        'title_singular' => 'Użytkownik',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'productManagement' => [
        'title'          => 'Product Management',
        'title_singular' => 'Product Management',
    ],
    'productCategory' => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'photo'              => 'Photo',
            'photo_helper'       => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated At',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted At',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'productTag' => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'product' => [
        'title'          => 'Products',
        'title_singular' => 'Product',
        'fields'         => [
            'id'                                     => 'ID',
            'id_helper'                              => ' ',
            'created_at'                             => 'Created at',
            'created_at_helper'                      => ' ',
            'updated_at'                             => 'Updated At',
            'updated_at_helper'                      => ' ',
            'deleted_at'                             => 'Deleted At',
            'deleted_at_helper'                      => ' ',
            'api'                                    => 'Identyfikator produktu',
            'api_helper'                             => ' ',
            'product_id_wordpress'                   => 'Id produktu wordpress',
            'product_id_wordpress_helper'            => ' ',
            'product_slug'                           => 'Końcówka linku do strony produktowej',
            'product_slug_helper'                    => ' ',
            'status'                                 => 'Status opublikowania produktu w wordpress.',
            'status_helper'                          => ' ',
            'sku'                                    => 'SKU - Numer nagazynowu',
            'sku_helper'                             => ' ',
            'ean'                                    => 'Ean',
            'ean_helper'                             => ' ',
            'product_availability'                   => 'Dostępność produktu',
            'product_availability_helper'            => ' ',
            'currency'                               => 'Waluta',
            'currency_helper'                        => ' ',
            'realization_time'                       => 'Czas realizacji',
            'realization_time_helper'                => ' ',
            'price'                                  => 'Cena produktu w sklepie',
            'price_helper'                           => ' ',
            'attributes_from_poligrafia_api'         => 'API_ID atrybutów',
            'attributes_from_poligrafia_api_helper'  => ' ',
            'change_price_when'                      => 'Kiedy zmiana ceny',
            'change_price_when_helper'               => ' ',
            'attach_additional_product'              => 'Dodatkowe produkty',
            'attach_additional_product_helper'       => ' ',
            'disable_from_delivery'                  => 'Dostawa',
            'disable_from_delivery_helper'           => ' ',
            'product_rating'                         => 'Ocena produktu',
            'product_rating_helper'                  => ' ',
            'owner'                                  => 'Produkt przypisany do',
            'owner_helper'                           => ' ',
            'product_name'                           => 'Nazwa produktu',
            'product_name_helper'                    => ' ',
            'product_desc_long'                      => 'Pełny opis produktu',
            'product_desc_long_helper'               => ' ',
            'product_desc_short'                     => 'Dodatkowy opis produktu',
            'product_desc_short_helper'              => ' ',
            'product_desc_dane'                      => 'Informacje techniczne projektu',
            'product_desc_dane_helper'               => ' ',
            'images_urls'                            => 'Linki do obrazków produktu',
            'images_urls_helper'                     => ' ',
            'dimension'                              => 'Rozmiar produktu, wymiary',
            'dimension_helper'                       => ' ',
            'unit'                                   => 'Unit',
            'unit_helper'                            => ' ',
            'tags'                                   => 'Tagi',
            'tags_helper'                            => ' ',
            'filters_product_style'                  => 'Styl produktu',
            'filters_product_style_helper'           => ' ',
            'filters_product_type'                   => 'Rodzaj produktu',
            'filters_product_type_helper'            => ' ',
            'filters_color_dominant'                 => 'Kolor dominujący',
            'filters_color_dominant_helper'          => ' ',
            'filters_products_decoration'            => 'Zdobienie',
            'filters_products_decoration_helper'     => ' ',
            'filters_product_photo'                  => 'Filtry zdjęcia',
            'filters_product_photo_helper'           => ' ',
            'filters_product_format'                 => 'Format / Rodzaj złożenia / Ksztalt',
            'filters_product_format_helper'          => ' ',
            'meta_title'                             => 'Tytuł produktu wyświetlany w wyszukiwarce internetowej',
            'meta_title_helper'                      => ' ',
            'meta_desc'                              => 'Opis produktu w wyszukiwarce internetowej.',
            'meta_desc_helper'                       => ' ',
            'photo_url_feed'                         => 'Zdjęcie do użycia w feedzie',
            'photo_url_feed_helper'                  => ' ',
            'disable_from_feed'                      => 'Wyklucz z feedu',
            'disable_from_feed_helper'               => ' ',
            'categories'                             => 'Kategorie produktu',
            'categories_helper'                      => ' ',
            'product_variant_family'                 => 'Rodzina wariantów',
            'product_variant_family_helper'          => ' ',
            'product_collection'                     => 'Kolekcja',
            'product_collection_helper'              => ' ',
            'link_to_org_product'                    => 'Numer magazynowy produktu.',
            'link_to_org_product_helper'             => ' ',
            'poligrafia_templatebindingtype'         => 'Poligrafia Templatebindingtype',
            'poligrafia_templatebindingtype_helper'  => ' ',
            'poligrafia_templateid'                  => 'Poligrafia Templateid',
            'poligrafia_templateid_helper'           => ' ',
            'poligrafia_manufacturer'                => 'Poligrafia Manufacturer',
            'poligrafia_manufacturer_helper'         => ' ',
            'poligrafia_creator_type'                => 'Poligrafia Creator Type',
            'poligrafia_creator_type_helper'         => ' ',
            'poligrafia_product_code_antigro'        => 'Poligrafia Product Code Antigro',
            'poligrafia_product_code_antigro_helper' => ' ',
            'poligrafia_product_source'              => 'Poligrafia Product Source',
            'poligrafia_product_source_helper'       => ' ',
            'is_personalized'                        => 'Personalizowany',
            'is_personalized_helper'                 => ' ',
            'show_free_sample_btn'                   => 'Darmowe próbki',
            'show_free_sample_btn_helper'            => ' ',
            'preview_featured_image'                 => 'Preview Featured Image',
            'preview_featured_image_helper'          => ' ',
        ],
    ],
    'addShop' => [
        'title'          => 'Add Shop',
        'title_singular' => 'Add Shop',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'email'             => 'Email',
            'email_helper'      => ' ',
            'password'          => 'Password',
            'password_helper'   => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'd'                 => 'D',
            'd_helper'          => ' ',
        ],
    ],
];
