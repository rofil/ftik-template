<?php 

namespace Rofil\BootstrapTemplate\Libraries;

class Menu
{
    protected $menu;

    public function setMenu(array $menu)
    {
        $this->menu = $menu;
        return $this;
    }

    public function render()
    {
        return $this->_render($this->menu);
    }

    public function _render($menus)
    {
        $ulAttrs = isset($menus['attributes']) ? ' '.$this->parseAttributes($menus['attributes']) : "";
        $menuHTML = "<ul$ulAttrs>";
        foreach($menus['items'] as $menu){
            $options = isset($menu['options']) ? ' '.$this->parseAttributes($menu['options']) : "";
            $attributes = isset($menu['attributes']) ? ' '.$this->parseAttributes($menu['attributes']) : "";
            $menuHTML .= "<li".$options.">";
            $menuHTML .= "<a href='". $menu['url'] ."'$attributes>". $menu['label'] .'</a>';
            if(isset($menu['childs']) && count($menu['childs'])>0){
                $menuHTML .= $this->_render($menu['childs']);
            }
            $menuHTML .= "</li>";
        }

        $menuHTML .= "</ul>";
        return $menuHTML;
    }

    public function parseAttributes(array $attributes)
    {
        $attributesMap = array_map(function($item, $key){
            return $key."=\"".$item."\"";
        }, $attributes, array_keys($attributes));
        return implode(" ", $attributesMap);
    }
}