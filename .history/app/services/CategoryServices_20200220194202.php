<?php 
namespace App\Services;

use App\Category;

class CategoryServices
{
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function getById($id){
        return $this->category->where('id','=',$id)->first();
    }

    public function get()
    {
        return $this->category->get();
    }
    public function store($request)
    {
        try{
            return $this->category->create($request);
        }
        catch(Exception $e)
        {
            throw $e;
        }
    }
}
?>