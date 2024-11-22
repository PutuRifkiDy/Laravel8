import { Head, Link } from '@inertiajs/react';
import React from 'react';
import EndUserLayout from '@/Layouts/EndUserLayout';

export default function Welcome() {


    return (
        <>
            <Head title="Welcome" />
            <EndUserLayout>
                <div className="">
                    <h1>Ini adalah halaman Home</h1>
                </div>
            </EndUserLayout>
        </>
    );
}
