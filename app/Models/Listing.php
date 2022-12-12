<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

   /*  public static function allListings(){
        return [
            [
                'id' => 1,
                'title' => 'Listing one',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Tortor at risus viverra adipiscing at in tellus integer. Nisl tincidunt eget nullam non nisi est. Aliquet bibendum enim facilisis gravida neque convallis a cras semper. Eget nulla facilisi etiam dignissim. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Eu mi bibendum neque egestas congue. Commodo odio aenean sed adipiscing diam. Vitae congue mauris rhoncus aenean vel elit scelerisque. At tempor commodo ullamcorper a.
                 Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin.'
            ],

            [
                'id' => 2,
                'title' => 'Listing two',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Tortor at risus viverra adipiscing at in tellus integer. Nisl tincidunt eget nullam non nisi est. Aliquet bibendum enim facilisis gravida neque convallis a cras semper. Eget nulla facilisi etiam dignissim. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Eu mi bibendum neque egestas congue. Commodo odio aenean sed adipiscing diam. Vitae congue mauris rhoncus aenean vel elit scelerisque. At tempor commodo ullamcorper a.
                 Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin.'
            ],

            [
                'id' => 3,
                'title' => 'Listing three',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Tortor at risus viverra adipiscing at in tellus integer. Nisl tincidunt eget nullam non nisi est. Aliquet bibendum enim facilisis gravida neque convallis a cras semper. Eget nulla facilisi etiam dignissim. Eu volutpat odio facilisis mauris sit amet massa vitae tortor. Eu mi bibendum neque egestas congue. Commodo odio aenean sed adipiscing diam. Vitae congue mauris rhoncus aenean vel elit scelerisque. At tempor commodo ullamcorper a.
                 Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin.'
            ]
            ];
    }

    public static function find($id){
        $listings = self::allListings();//we can use self this way when the function or property to be called is in the same static class
        foreach($listings as $listing){
            if($listing['id']==$id){
                return $listing;
            }

        }

    }
 */
    public function scopeFilter($query, array $filters)
    {
        # code...
        if($filters['tag'] ?? false){
            $query->where('tags','like','%'.request('tag').'%');
        }

        if($filters['search'] ?? false){
            $query->where('title','like','%'.request('search').'%')
            ->orWhere('description','like','%'.request('search').'%')
            ->orWhere('tags','like','%'.request('search').'%');

        }
    }



}
