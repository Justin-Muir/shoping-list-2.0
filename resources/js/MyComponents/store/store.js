import {defineStore} from 'pinia'
export const getDataStore =defineStore('store',{
    id: 'store',
    state:() => ({
        lists:{},
        items:[],
        editItems:{},
        ListTotal:0,
        ifLogin:[]
    })
})