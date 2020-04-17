<?php

namespace App\Observers;

use App\Models\Sermon;
use App\Models\Category;

class SermonCountObserver
{
    /**
     * Handle the sermon "created" event.
     *
     * @param  \App\Models\Sermon  $sermon
     * @return void
     */
    public function created(Sermon $sermon)
    {
        $sermon->category()->increment('posts_count');
    }

    /**
     * Handle the sermon "updated" event.
     *
     * @param  \App\Models\Sermon  $sermon
     * @return void
     */
    public function updated(Sermon $sermon)
    {
        $previous_category_id = $sermon->getOriginal('category_id');
        if ($previous_category_id != $sermon->category_id) {
            Category::where('id', $previous_category_id)->decrement('sermons_count');
            Category::where('id', $sermon->category_id)->increment('sermonss_count');
        }
    }

    /**
     * Handle the sermon "deleted" event.
     *
     * @param  \App\Models\Sermon  $sermon
     * @return void
     */
    public function deleted(Sermon $sermon)
    {
        $sermon->category()->decrement('posts_count');
    }

    /**
     * Handle the sermon "restored" event.
     *
     * @param  \App\Models\Sermon  $sermon
     * @return void
     */
    public function restored(Sermon $sermon)
    {
        //
    }

    /**
     * Handle the sermon "force deleted" event.
     *
     * @param  \App\Models\Sermon  $sermon
     * @return void
     */
    public function forceDeleted(Sermon $sermon)
    {
        //
    }
}
