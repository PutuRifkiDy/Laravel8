import React from "react";
import Navbar from "@/Components/Navbar";
export default function EndUserLayout({children}){
    return(
        <>
            <div className="">
                <Navbar />
                    {children}
            </div>
        </>
    );
}