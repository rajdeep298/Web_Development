function Message(){
    // JSX:JavaScript XML
    const name="Rajdeep";
    if (name=="Rajdeep"){
        return (
            <div>
                <h1>Hi {name}</h1>
            </div>
        )
    }
    else{
        return (
            <div>
                <h1>Hi Guest</h1>
            </div>
        )
    }
}

export default Message;