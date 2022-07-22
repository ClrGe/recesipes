<?php

namespace App\Mail;

use App\Models\Recipes\Media;
use App\Models\Recipes\Recipe;
use App\Models\Recipes\Steps;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RecipeSendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $mailData;
    public $recipe;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData, $recipe)
    {
        $this->mailData = $mailData;
        $this->recipe = $recipe;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mediaRecipe = Media::where('recipe_id', $this->recipe->id)->first();
        $stepsRecipe = Steps::where('recipe_id', $this->recipe->id)->get();
        return $this->subject($this->recipe->name)
            ->view('mail.recipe-send', compact( 'mediaRecipe', 'stepsRecipe'));
    }
}
