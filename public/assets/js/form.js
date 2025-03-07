document.addEventListener('alpine:init', () => {
    Alpine.magic('form', el => () => {
        /**
         * The form's submit button.
         */
        const button = el.querySelector('[type=submit], button:not([type])')
            ?? (el.id && document.querySelector('[form='+el.id+']'));

        const data = {};

        return {
            ...data,
            processing: false,
            recentlySuccessful: false,
            errors: {},
            dispatch(event, data) {
                el.dispatchEvent(new CustomEvent(event, { detail: data, bubbles: true }));
            },
            submit() {
                this.processing = true;
                button.disabled = true;

                return axios.post(el.action, el).then(response => {
                    if (response.headers['x-location']) {
                        location.href = response.headers['x-location'];
                    }

                    this.errors = {};
                    this.recentlySuccessful = true;
                    this.dispatch('then', response.data);

                    setTimeout(() => this.recentlySuccessful = false, 3000);

                    return Promise.resolve(response.data);
                }).catch(error => {
                    this.dispatch('catch', error);
                    this.errors = error.response?.data?.errors ?? {};

                    el.elements[Object.keys(this.errors)[0]]?.focus();

                    return Promise.reject(error);
                }).finally(() => {
                    this.processing = false;
                    this.dispatch('finally');

                    button.disabled = false;
                });
            },
        };
    });
});
