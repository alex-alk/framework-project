import { createComponent } from "../../js_modules/main.js"
import { Table } from "./Table.js"
import { store } from '../../js_modules/store.js'

export class Users {

    getElement() {
        const html = /* html */`
            <div class="card">
                <div class="font-semibold text-xl mb-4">Utilizatori</div>
                <users-table></users-table>
            </div>
            `
        const component = createComponent(html)

        const $table = component.querySelector('users-table')
        const table = new Table()
        $table.replaceWith(table.getElement())
        table.columns = ['Prenumex', 'Numex'];

        if ('users' in store) {
            table.data = store.users
        } else {
            fetch('api/a')
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }
                    return response.json(); // or response.text(), etc.
                })
                .then(data => {
                    table.data = data
                    store.users = data
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
            });
        }
        
        return component
    }
}