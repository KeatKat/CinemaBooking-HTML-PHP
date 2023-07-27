<?php

include_once "Entity/FoodAndDrinks.php";

class CinemaManagerViewFoodAndDrinksCTL
{

    public function viewFoodAndDrinks()
    {
        $foodAndDrinksItems = new FoodAndDrinks();
        return ($foodAndDrinksItems->getFoodAndDrinksItems());
    }

    public function viewUpdateFoodAndDrinks()
    {
        $foodAndDrinksItems = new FoodAndDrinks();
        return ($foodAndDrinksItems->getUpdateFoodAndDrinksItems());
    }

    public function viewSelectedFoodAndDrinksToUpdate($indexSelected)
    {
        $foodAndDrinksItems = new FoodAndDrinks();
        return ($foodAndDrinksItems->getSelectedFoodAndDrinksItem($indexSelected));
    }

    public function viewSuspendFoodAndDrinks()
    {
        $foodAndDrinksItems = new FoodAndDrinks();
        return ($foodAndDrinksItems->getSuspendFoodAndDrinksItems());
    }
}
