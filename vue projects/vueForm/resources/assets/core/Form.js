import Errors from "./Error"

class Form {
    constructor(data) {
        this.originalData = data;
        // console.log(data);
        for(let field in data) {
            this[field] = data[field];
            // console.log(`field ${field}: ${this[field]} = ${data[field]}`)
        }
        this.errors = new Errors();
    }

    data()  {
        let data = {};

        for(let property in this.originalData) {
            data[property] = this[property];
        }

        return data;
    }

    reset() {
        for (let field in this.originalData) {
            this[field] = '';
        }

        this.errors.clear();
    }

    post(url) {
        return this.submit('POST', url);
    }

    delete(url) {
        return this.submit('DELETE', url);
    }

    submit(requestType, url) {
        return new Promise((resolve, reject) => {
            axios.request({ method:requestType, url:url, data:this.data() })
                .then(response => {
                    this.onSuccess(response.data);

                    resolve(response.data);
                })
                .catch(error => {
                    this.onFail(error.response.data);

                    reject(error.response.data);
                })
        });
    }

    onSuccess(data) {
        alert(data.message);

        this.reset();
    }

    onFail(errors) {
        this.errors.record(errors);
    }
}

export default Form;
