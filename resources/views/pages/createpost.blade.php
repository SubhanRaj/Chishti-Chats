<x-layout>
    <x:slot:title>
        Create New Post
    </x:slot:title>

    <div class="container">
        <div class="create">
            <div class="create__head">
                <div class="create__title"><img src="{{asset('assets/fonts/icons/main/New_Topic.svg')}}" alt="New topic">Create New Thread
                </div>
                <span>Forum Guidelines</span>
            </div>
            <div class="create__section">
                <label class="create__label" for="title">Thread Title</label>
                <input type="text" class="form-control" id="title" placeholder="Add here">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="create__section">
                        <label class="create__label" for="category">Select Category</label>
                        <label class="custom-select">
                            <select id="category">
                                <option>Choose</option>
                                <option>Choose #2</option>
                                <option>Choose #3</option>
                            </select>
                        </label>
                    </div>
                </div>
            </div>
            <div class="create__section create__textarea">
                <label class="create__label" for="description">Description</label>
                <div class="create__textarea-head">
                    <span><i class="icon-Quote"></i></span>
                    <span><i class="icon-Bold"></i></span>
                    <span><i class="icon-Italic"></i></span>
                    <div class="create__textarea-separate"></div>
                    <span><i class="icon-Share_Topic"></i></span>
                    <span><i class="icon-BlockQuote"></i></span>
                    <span><i class="icon-Performatted"></i></span>
                    <span><i class="icon-Upload_Files"></i></span>
                    <span class="create__textarea-separate"></span>
                    <span><i class="icon-Bullet_List"></i></span>
                    <span><i class="icon-heading"></i></span>
                    <span><i class="icon-Horizontal_Line"></i></span>
                    <span><i class="icon-Emoticon"></i></span>
                    <span><i class="icon-Settings"></i></span>
                    <span><i class="icon-Color_Picker"></i></span>
                    <div class="create__textarea-btn">
                        <a href="#" class="btn">Preview</a>
                    </div>
                </div>
                <textarea class="form-control"
                    id="description">Adding amazing books to your summer reading list can be as simple as signing up for the BuzzFeed Books newsletter! You'll get a review of a new book you might love every Wednesday, plus much more twice a week: great jokes and quizzes, wonderful lists, powerful essays, all the Harry Potter and YA buzz you can handle, and of course, even more book recommendations. So make some space in your beach bag now — because you're going to have a lot to read this summer.</textarea>
            </div>
            <div class="create__section">
                <label class="create__label" for="tags">Add Tags</label>
                <input type="text" class="form-control" id="tags" placeholder="e.g. nature, science">
            </div>
            <div class="create__footer">
                <a href="#" class="create__btn-cansel btn">Cancel</a>
                <a href="#" class="create__btn-create btn btn--type-02">Create Thread</a>
            </div>
        </div>
    </div>
</x-layout>
