<?php require('partials/head.php') ?>
    <?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <p>ara som a note create</p>

            <div>
                <div class="md:grid md:grid-cols-3 md: gap-6">
                    <div class="mt-5 md:col-span-2 md:mt-0">
                        <form method="POST">
                            <div class="shadow sm:overflow-hidden sm:rounded-md">
                                <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                                    <div>
                                        <Label for="body" class="block text-sm font-medium text-gray-700">Body</Label>

                                        <div class="mt-1">
                                            <textarea
                                                    id="body"
                                                    name="body"
                                                    rows="3"
                                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus: border-indigo-500 focus:ring-indigo-500 sm: text-sm"
                                                    placeholder="Here's an idea for a note..."
                                                    ><?= isset($_POST['body'])? $_POST['body'] : '' ?></textarea> <!--requereix que l'usuari no ens enviï el formulari buid, pero no basta........ se pot fer: isset($_POST['body']) ?? '' -->

                                            <?php if (isset($errors['body'])) : ?>
                                                <p class="text-red-500 text-xs mt-2"><?= $errors['body'] ?></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                        <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </main>
<?php require('partials/footer.php') ?>


